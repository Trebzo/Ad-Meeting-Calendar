CREATE TABLE IF NOT EXISTS tasks (
    id INTEGER GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    meeting_id INTEGER NOT NULL REFERENCES meetings(id),
    assigned_to INTEGER REFERENCES users(id),
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status VARCHAR(50) DEFAULT 'pending',
    due_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);